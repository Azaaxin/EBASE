<?php if(basename($_SERVER['SCRIPT_FILENAME'])==="post.php"){
  echo "<h1>Unauthorized</h1><br><br><br>WUEBASE.com ";
}else{
    echo '<div class="post_form">
             <form action="" id="form-id" class="posting_text">
                <textarea type="text" class="post" contenteditable="true" placeholder="Post something!"></textarea>
                    <div class="submit_container">
                <div>
                <a href="#" onclick="form.submit();" class="post_submit">Post</a>
                </div>
            </div>
        </form>
    </div>';}?>