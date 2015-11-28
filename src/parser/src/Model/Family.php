<?php

	namespace WhichBrowser\Model;


	class Family extends NameVersion {
		public function toArray() {
			$result = [];

			if (!empty($this->name) && empty($this->version)) return $this->name;
			if (!empty($this->name)) $result['name'] = $this->name;
			if (!empty($this->version)) $result['version'] = $this->version->toArray();

			return $result;
		}
	}