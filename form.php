<?php include('form_process.php'); ?>
<link rel="stylesheet" href="style2.css" type="text/css">
<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
    <input
        placeholder="Your name"
        type="text"
        tabindex="1"
        name="name"
        autofocus
    />
    <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
    <input
        placeholder="Your Email Address"
        type="email"
        tabindex="2"
        name="email"
    />
    <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
    <textarea
        placeholder="Type your Message Here...."
        tabindex="3"
        name="message"
    ></textarea>
    </fieldset>
    <fieldset>
    <button
        name="submit"
        type="submit"
        id="contact-submit"
        data-submit="...Sending"
    >
        Submit
    </button>
    </fieldset>
</form>