<?php
class ControllerExtensionModuleCategoryGrid extends Controller
{
	private $error = array();

	public function index()
	{
		$this->load->language('extension/module/category_grid');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_category_grid', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/category_grid', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/category_grid', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_category_grid_status'])) {
			$data['module_category_grid_status'] = $this->request->post['module_category_grid_status'];
		} else {
			$data['module_category_grid_status'] = $this->config->get('module_category_grid_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/category_grid', $data));
	}

	protected function validate()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/category_grid')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		// if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
		// 	$this->error['name'] = $this->language->get('error_name');
		// }

		return !$this->error;
	}

	// public function uninstall()
	// {
	// 	$this->load->model('setting/setting');
	// 	$this->model_setting_setting->deleteSetting('module_category_grid');
	// }
}
