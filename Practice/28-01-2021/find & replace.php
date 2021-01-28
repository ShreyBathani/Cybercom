<?php

//Find and Replace Application
echo "<h1>Find and Replace Application</h1><br>";

if(isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace'])){
    $text = $_POST['text'];
    $search = $_POST['search'];
    $replace = $_POST['replace'];
    $search_len = strlen($search);
    $replace_len = strlen($replace);
    $offset = 0;
    if(!empty($text) && !empty($search) && !empty($replace)){
        $new_text = $text;
        while($strpos = stripos($new_text, $search, $offset)){
            $offset = $strpos + $replace_len;
            $new_text = substr_replace($new_text, $replace, $strpos, $search_len);
        }
        echo $new_text;
        $text = $search = $replace = '';
    }
    else{
        echo '<script>alert(\'Please fill all the fields\')</script>';

    }
}

?>

<form action='find & replace.php' method = 'POST'>
    Enter Your text: <br>
    <textarea name="text" rows="6" cols="30"><?php if (isset($text)){echo $text;} ?></textarea><br><br>
    Search for: <br>
    <input type="text" name="search" value="<?php if (isset($search)){echo $search;} ?>"><br><br>
    Replace with: <br>
    <input type="text" name="replace" value="<?php if (isset($replace)){echo $replace;} ?>"><br><br>
    <input type="submit" value="submit">
</form>