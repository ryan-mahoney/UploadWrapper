<?php
namespace UploadWrapper;

class UploadWrapper {
	private $root;

	public function __construct ($root) {
		$this->root = $root;
	}

	public function storage ($path) {
		$path = $this->root . $path;
		if (!file_exists($path)) {
			mkdir ($path, 0777, true);
		}
		return new \Upload\Storage\FileSystem($path, true);
	}

	public function file ($field, $storage) {
		return new \Upload\File($field, $storage);
	}
}