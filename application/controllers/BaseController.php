<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
   public function province(){

       $result = Province::where('PAK_ID',Input::get('id'))->select('PROVINCE_ID','PROVINCE_NAME')->get();
       $dropdown = '<option value=""></option>';
       foreach($result as $result):
        $dropdown .= '<option value="'.$result->PROVINCE_ID.'">'.$result->PROVINCE_NAME.'</option>';
       endforeach;
       return Response::make($dropdown);
    }
    public function amphur(){

       $result = Amphur::where('PROVINCE_ID',Input::get('id'))->select('AMPHUR_ID','AMPHUR_NAME')->get();
      
       $dropdown = '<option value=""></option>';
       foreach($result as $result):
        $dropdown .= '<option value="'.$result->AMPHUR_ID.'">'.$result->AMPHUR_NAME.'</option>';
       endforeach;
       return Response::make($dropdown);
    }
      public function tumbon(){

       $result = Tumbon::where('AMPHUR_ID',Input::get('id'))->select('TUMBON_ID','TUMBON_NAME')->get();
       $dropdown = '<option value=""></option>';
       foreach($result as $result):
        $dropdown .= '<option value="'.$result->TUMBON_ID.'">'.$result->TUMBON_NAME.'</option>';
       endforeach;
       return Response::make($dropdown);
    }
}