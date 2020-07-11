<?php 
    function delete($row)
    {
        
        $fp_data = fopen('./assets/data/music_data.txt', 'a+');
        
        if(!$fp_data)
        {
            fclose($fp_data);
        }

        
        while(!feof($fp_data))
        {
            $data = fgets($fp_data);
            $tmp = explode('|', $data);
            foreach($tmp as $value)
            {
                $delete = trim($value);
                if($row == $delete)
                {
                    fputs($fp_data, 'aaa');
                    fclose($fp_data);
                    return;
                }
            }
            
        }
    }

?>