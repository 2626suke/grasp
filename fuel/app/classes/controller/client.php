<?php

class Controller_Client extends Controller_Template
{

    public function action_list()
    {
        $clients = Model_Client::find('all');

        $this->template->set_global('page_name', '顧客一覧');
        $this->template->content = View::forge('client/list', compact('clients'));
    }

}
