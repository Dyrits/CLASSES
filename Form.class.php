<?php
class Form {
    private $fieldsetLegend;
    private $formMethod;
    private $formAction;
    private $form;

    /**
     * Form constructor.
     * @param $formMethod
     * @param $formAction
     * @param $fieldsetLegend
     */
    public function __construct($formMethod, $formAction, $fieldsetLegend)
    {
        $this->formMethod = $formMethod;
        $this->formAction = $formAction;
        $this->fieldsetLegend = $fieldsetLegend;
        $this->openForm();
    }

    private function openForm() {
        $this->form =
            "<form action='$this->formAction' method='$this->formMethod'><fieldset><legend>$this->fieldsetLegend</legend>";
    }

    public function setText($name = "", $rows=2, $cols=20, $required=false) {
        $attributes = "name='$name' rows='$rows' cols='$cols' required='$required'";
        $this->form .= "<textarea $attributes></textarea><br>";
    }

    public function setInput($type, $name, $value = "") {
        $value = $value ? $value : $name;
        $this->form .= "<input type='$type' id='$name' name='$name' value='$value'><label for='$name'>$name</label><br>";
    }

    public function setSubmit($value = "") {
        $this->form .= "<input type='submit' name='$value' value='$value'>";
    }

    private function closeForm() {
        $this->form .= "</fieldset></form>";
    }

    public function getForm() {
        $this->closeForm();
        return $this->form;
    }
}