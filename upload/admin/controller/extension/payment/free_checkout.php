<?php
class ControllerExtensionPaymentFreeCheckout extends Controller {
	private $error = [];

	public function index(): void {
		$this->load->language('extension/payment/free_checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('free_checkout', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');

		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/free_checkout', 'token=' . $this->session->data['token'], true)
		];

		$data['action'] = $this->url->link('extension/payment/free_checkout', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true);

		if (isset($this->request->post['free_checkout_order_status_id'])) {
			$data['free_checkout_order_status_id'] = $this->request->post['free_checkout_order_status_id'];
		} else {
			$data['free_checkout_order_status_id'] = $this->config->get('free_checkout_order_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['free_checkout_status'])) {
			$data['free_checkout_status'] = $this->request->post['free_checkout_status'];
		} else {
			$data['free_checkout_status'] = $this->config->get('free_checkout_status');
		}

		if (isset($this->request->post['free_checkout_sort_order'])) {
			$data['free_checkout_sort_order'] = $this->request->post['free_checkout_sort_order'];
		} else {
			$data['free_checkout_sort_order'] = $this->config->get('free_checkout_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/free_checkout', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/free_checkout')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
