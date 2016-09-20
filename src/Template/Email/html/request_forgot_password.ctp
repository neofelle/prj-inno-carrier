<p>Dear <?= $result['firstname']; ?> <?= $result['lastname']; ?>,</p>
<p>We received a request to reset the password associated with this e-mail address. If you made this request, please follow the instructions below.</p>

<p>Click the link below to reset your password using our secure server:</p>

<p><?= $result['link']; ?></p>

<p>If you did not request to have your password reset you can safely ignore this email. Rest assured your customer account is safe. </p>