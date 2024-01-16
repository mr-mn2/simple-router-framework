<?php
namespace App\Controller;
class postController {

    public function single(){
        global $request;
        var_dump($request->get_route_parameter('slug'));
        var_dump($request->get_route_parameter('comment_id'));
    }
}
