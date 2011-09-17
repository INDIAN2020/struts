<?php

class Settings_Option_Text extends Settings_Option {
	public function to_html() {
		return '<input type="text" name="' . $this->parent_name() . '[' . $this->name() . ']" value="' . $this->value() . '" />';
	}
}