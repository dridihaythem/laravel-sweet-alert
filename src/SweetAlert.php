<?php

namespace DridiHaythem\LaravelSweetAlert;

class SweetAlert
{
    public $data = [
        'showConfirmButton' => true,
    ];

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

    public function setFooter(String $footer)
    {
        $this->data['footer'] = $footer;

        return $this;
    }

    public function showCloseButton()
    {
        $this->data['showCloseButton'] = true;

        return $this;
    }

    public function showCancelButton(String|null $cancelButtonText = null)
    {
        $this->data['showCancelButton'] = true;

        if ($cancelButtonText) {
            $this->data['cancelButtonText'] = $cancelButtonText;
        }

        return $this;
    }

    public function showConfirmButton(bool $bool)
    {
        $this->data['showConfirmButton'] = $bool;

        return $this;
    }

    public function show()
    {
        $this->data['show'] = true;

        session(['sweet_alert' => $this->data]);
    }
}
