<?php
namespace Core;

class View {

	public function render($path, $data) {
		$file = '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . $path . '.php';
		extract($data);
		if (file_exists($file)) {
			require '../Views/layouts/header.php';
			require $file;
			require '../Views/layouts/footer.php';
		}
	}
}