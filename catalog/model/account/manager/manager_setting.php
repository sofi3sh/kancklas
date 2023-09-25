<?php
class ModelAccountManagerManagerSetting extends Model {

    /**
     * @return void
     * Витягнути дані з БД
     */
    public function getData(){
        $data = array();
        $data['minimum_order'] = 500;
        $data['minimum_prepayment_value'] = 200;
        $data['minimum_prepayment_percent'] = 20;
        $data['minimum_prepayment_order'] = 1000;

        return $data;
    }

    /**
     * @return void
     * Зберегти дані в БД
     */
    public function saveData(){

    }

}