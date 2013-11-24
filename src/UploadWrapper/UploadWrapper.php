<?php
namespace UploadWrapper;

class UploadWrapper {
	private $root;

	public function __construct ($root) {
		$this->root = $root;
	}

	public function storage ($path) {
		return new \Upload\Storage\FileSystem($this->root . $path);
	}

	public function file ($field, $storage) {
		return new \Upload\File($field, $storage);
	}
}