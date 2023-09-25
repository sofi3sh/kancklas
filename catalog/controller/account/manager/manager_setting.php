<?php
class ControllerAccountManagerManagerSetting extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/manager/manager_setting', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/manager/manager_setting');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_newsletter'),
			'href' => $this->url->link('account/manager/manager_setting', '', true)
		);

		$data['action'] = $this->url->link('account/manager/manager_setting', '', true);

        $this->load->model('account/manager/manager_setting');

        $data['data'] = $this->model_account_manager_manager_setting->getData();
		$data['back'] = $this->url->link('account/account', '', true);
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/manager/manager_setting', $data));
	}
}