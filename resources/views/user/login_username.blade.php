<div id="vue-core-sign-login-username">
    <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">{{get_options("web_name")}}</a>
    </div>
    <form class="card card-md" @@submit.prevent="submit">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">登录到您的帐户</h2>
            <div class="mb-3">
                <label class="form-label">用户名
                    <span class="form-label-description">
                  <a href="/login">邮箱登陆</a>
                </span></label>
                <input type="text" v-model="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="mb-2">
                <label class="form-label">
                    密码
                    <span class="form-label-description">
                  <a href="/forgot-password">忘记密码?</a>
                </span>
                </label>
                <input type="password" v-model="password" class="form-control" placeholder="Password" autocomplete="off" required>
            </div>
            @if(get_options('core_user_login_captcha','开启')==='开启')
                <div class="mb-3">
                    <label for="" class="form-label">验证码</label>
                    <div class="input-group">
                        <input type="text" v-model="captcha" class="form-control" placeholder="captcha" autocomplete="off" required>
                        <span class="input-group-link">
                        <img src="{{captcha()->inline()}}" alt="" onclick="this.src='/captcha?id='+Math.random()">
                    </span>
                    </div>
                </div>
            @endif

            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">登陆</button>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        还没有账号? <a href="/register" tabindex="-1">立即注册</a>
    </div>

</div>