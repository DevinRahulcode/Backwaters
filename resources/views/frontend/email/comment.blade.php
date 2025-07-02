<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>New Comment Alert</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, sans-serif;">

  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color:#f4f4f4; padding: 40px 0;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellspacing="0" cellpadding="0" style="background:#ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
          
          <!-- Header -->
          <tr style="background-color: #343a40;">
            <td style="padding: 20px; text-align: center;">
              <img src="[URL_TO_YOUR_LOGO]" alt="Logo" style="max-height: 40px;">
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td style="padding: 40px;">
              <h2 style="color: #222; font-size: 22px; margin: 0 0 20px;">📬 New Comment Submitted</h2>

              <p style="font-size: 16px; color: #555; margin: 0 0 20px;">
                A new comment has been submitted on your post titled:
              </p>

              <p style="font-size: 18px; font-weight: bold; color: #333; margin: 0 0 20px;">
                "{{ $title }}"
              </p>

              <!-- Commenter Details -->
              <table role="presentation" width="100%" style="margin-bottom: 20px;">
                <tr>
                  <td style="padding: 5px 0; font-weight: bold; color: #555;">Name:</td>
                  <td style="padding: 5px 0; color: #333;">{{ $name }}</td>
                </tr>
                @if($websiteUrl)
                <tr>
                  <td style="padding: 5px 0; font-weight: bold; color: #555;">Website:</td>
                  <td style="padding: 5px 0;"><a href="{{ $websiteUrl }}" style="color: #0d6efd;">{{ $websiteUrl }}</a></td>
                </tr>
                @endif
              </table>

              <!-- Comment Box -->
              <div style="background-color: #f1f1f1; padding: 20px; border-radius: 6px; font-size: 16px; color: #333; line-height: 1.5;">
                {!! nl2br(e($comment)) !!}
              </div>

              <!-- Action Buttons -->
              <div style="margin-top: 30px; text-align: center;">
                <a href="{{-- route('admin.comments.approve', $comment->id) --}}" style="background-color:#28a745; color: #fff; text-decoration: none; padding: 12px 20px; border-radius: 5px; margin-right: 10px; display: inline-block;">
                  ✅ Approve
                </a>
                <a href="{{-- route('admin.comments.spam', $comment->id) --}}" style="background-color:#dc3545; color: #fff; text-decoration: none; padding: 12px 20px; border-radius: 5px; display: inline-block;">
                  🚫 Mark as Spam
                </a>
              </div>
            </td>
          </tr>

          <!-- Footer -->
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 20px 40px; text-align: center; font-size: 12px; color: #888;">
              You received this notification because you’re the author of the post.
              <br>
              © {{ date('Y') }} [Your Blog Name]. All rights reserved.
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
