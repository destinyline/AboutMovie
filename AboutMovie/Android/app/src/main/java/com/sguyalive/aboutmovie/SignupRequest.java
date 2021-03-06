package com.sguyalive.aboutmovie;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.Map;
import java.util.HashMap;

/**
 * Created by dream on 12/12/2016.
 */

public class SignupRequest extends StringRequest{
    private static final String REGISTER_REQUEST_URL = "http://192.168.2.179/148/Register.php";
    private Map<String,String> params;

    public SignupRequest(String username, String password, String email, Response.Listener<String> listener) {
        super(Method.POST,REGISTER_REQUEST_URL, listener,null);
        params = new HashMap<>();
        params.put("username",username);
        params.put("password",password);
        params.put("email",email);
    }

    @Override
    public Map<String,String>getParams(){
        return params;
    }
}
