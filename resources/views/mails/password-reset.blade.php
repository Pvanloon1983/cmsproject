<div style="font-family: Arial, sans-serif;">
    <h2>Hallo {{ $user->first_name ?? 'gebruiker' }},</h2>
    <p>U ontvangt deze e-mail omdat we een verzoek hebben ontvangen om uw wachtwoord opnieuw in te stellen.</p>
    <p>
        <a href="{{ $resetUrl }}" style="display:inline-block;padding:10px 20px;background:#313daa;color:#fff;text-decoration:none;border-radius:4px;">
            Stel wachtwoord opnieuw in
        </a>
    </p>
    <p>Als u geen wachtwoordherstel heeft aangevraagd, is er geen verdere actie vereist.</p>
    <p>Met vriendelijke groet,<br>Het CMS Team</p>
</div>
