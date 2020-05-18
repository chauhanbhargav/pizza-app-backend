<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use App\Traits\GenerateToken;
use App\Utils\AppConstant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use ApiResponse, GenerateToken;

    protected $users;

    /**
     * 
     *  @return mixed
     */
    public function __construct(User $user)
    {
        $this->users = $user;
    }

    /**
     * @param LoginRequest $request
     * 
     * @return JsonResponse
     */
    public function login(LoginRequest $request)
    {   
        try {
            $request->validate;

            DB::beginTransaction();

            $user = $this->users->where([
                'email' => $request->email
            ])->first();

            if (!$user) {
                $this->setMeta('status', AppConstant::STATUS_FAIL);
                $this->setMeta('message', __('message.login_failed'));
                return response()->json($this->setResponse(), AppConstant::UNAUTHORIZED);
            }

            if (!Hash::check($request->password, $user->password)) {
                $this->setMeta('status', AppConstant::STATUS_FAIL);
                $this->setMeta('message', __('message.login_failed'));
                return response()->json($this->setResponse(), AppConstant::UNAUTHORIZED);
            }

            $user->token = $this->getToken($user);

            DB::commit();
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('message.login_success'));
            $this->setData('user', $user);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message',  __('message.server_error'));
            return response()->json($this->setResponse(), AppConstant::UNPROCESSABLE_REQUEST);
        }
    }

    /**
     * @param RegisterRequest $request
     * 
     * @return JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        try {
            $request->validate;

            DB::beginTransaction();

            $user = $this->users;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $user->token = $this->getToken($user);
            unset($user->password);

            DB::commit();
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('message.register_success'));
            $this->setData('user', $user);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message',  __('message.server_error'));
            return response()->json($this->setResponse(), AppConstant::UNPROCESSABLE_REQUEST);
        }
    }

    /**
     * @return JsonResponse
     */
    public function logout()
    {
        dd('here');

        $token = JWTAuth::getToken();

        try {
            DB::beginTransaction();

            JWTAuth::invalidate($token);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message', __('message.server_error'));
            return response()->json($this->setResponse(), AppConstant::INTERNAL_SERVER_ERROR);
        }

        $this->setMeta('status', AppConstant::STATUS_OK);
        $this->setMeta('message', __('jwt.logout_success'));
        return response()->json($this->setResponse(), AppConstant::OK);
    }
}
