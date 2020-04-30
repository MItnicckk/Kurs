    <?PHP 
      function GetRealIp()
      {
      if (!empty($_SERVER['HTTP_CLIENT_IP']))
      {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
      echo $ip;
      }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
      echo $ip;
      }
      else
      {
      $ip=$_SERVER['REMOTE_ADDR'];
      echo $ip;
      }
      return $ip;
      }
      $compname= gethostbyaddr(GetRealIp());
          echo '<br>';
          echo 'компьютер  ', $compname;

          $ip1=$_SERVER['HKEY_CLASSES_ROOT'];
      echo $ip1;
      phpinfo();
       ?>