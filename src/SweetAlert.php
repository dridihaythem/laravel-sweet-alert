<?php

namespace DridiHaythem\LaravelSweetAlert;

class SweetAlert
{

    public $data = [];

    public function success()
    {
        $this->data['icon'] = 'success';

        return $this;
    }

    public function warning()
    {
        $this->data['icon'] = 'warning';

        return $this;
    }

    public function error()
    {
        $this->data['icon'] = 'error';

        return $this;
    }

    public function info()
    {
        $this->data['icon'] = 'info';

        return $this;
    }

    public function setTitle(String $title)
    {
        $this->data['title'] = $title;

        return $this;
    }

    public function setText(String $title)
    {
        $this->data['text'] = $title;

        return $this;
    }

    public function setButton(String $button)
    {
        $this->data['button'] = $button;

        return $this;
    }

    public function setButtons(array $buttons)
    {
        $this->data['buttons'] = $buttons;

        return $this;
    }

    public function show()
    {
        $this->data['show'] = true;

        session(['sweet_alert' => $this->data]);
    }
}