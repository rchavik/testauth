<?php

echo $this->Form->create();
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->submit('Login');
echo $this->Form->end();
