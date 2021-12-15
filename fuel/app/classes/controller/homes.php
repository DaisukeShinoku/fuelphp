<?php
class Controller_Homes extends Controller
{
    /**
     * @access  public
     * @return  Response
     */
    public function action_top()
    {
      return Response::forge(View::forge('homes/top'));
    }
}