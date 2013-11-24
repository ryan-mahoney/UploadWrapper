<?php
namespace UploadWrapper;

class UploadWrapper {
	public function storage ($path) {
		return new \Upload\Storage\FileSystem($path);
	}

	public function file ($field, $storage) {
		return new \Upload\File($field, $storage);
	}
}