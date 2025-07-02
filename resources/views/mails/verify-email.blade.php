<div style="font-family: Arial, sans-serif;">
    <h2>Hallo {{ $user->first_name ?? 'gebruiker' }},</h2>
    <p>U ontvangt deze e-mail omdat u zich heeft geregistreerd bij onze website. Klik op de onderstaande knop om uw e-mailadres te verifiëren en uw account te activeren.</p>
    <p>
        <a href="{{ $url }}" style="display:inline-block;padding:10px 20px;background:#313daa;color:#fff;text-decoration:none;border-radius:4px;">
            Verifieer e-mailadres
        </a>
    </p>
    <p>Als u zich niet heeft geregistreerd, is er geen verdere actie vereist.</p>
    <p>Met vriendelijke groet,<br>Het CMS Team</p>
</div>