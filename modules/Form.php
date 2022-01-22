<?php
    class Form
    {
        function __construct($action,$method,$enctype)
        {
            echo "<form action=".$action." method=".$method." enctype=".$enctype.">";
        }

        public function input($name, $options = [])
        {
            $options = array_merge([
                'type' => 'text',
                'id' => $name,
                'label' => ucfirst($name),
                'placeholder' => '',
                'maxsize'=>255
            ], $options);

            if($options['type']=='checkbox')
            {
               echo "<input type=".$options['type']." class=\"custom-control-input\" id=".$options['id']." name=".$options['id'].">
                  <label class=\"custom-control-label\" for=".$options['id'].">".$options['label']."</label>";
            }
            else if($options['type']=='textarea')
            {
                echo " <label for=".$options['id'].">".$options['label']."</label>
                 <textarea class=\"form-control\" id=".$options['id']." name=".$options['id']."></textarea>";
            }
            else if($options['type']=='email')
            {
                echo "<textarea class=\"form-control\" id=".$options['id']." name=".$options['id']."></textarea>";
            }
            else
            {
                echo "<label for=".$options['id'].">".$options['label']."</label>
                <input type=".$options['type']." class=\"form-control\" id=".$options['id']." name=".$options['id'].">";
            }
        }
    }