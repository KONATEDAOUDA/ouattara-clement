<div class="social-share-buttons">
    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="social-button facebook">
        <i class="fab fa-facebook-f"></i>
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($title ?? '') }}" target="_blank" class="social-button twitter">
        <i class="fab fa-twitter"></i>
    </a>

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($title ?? '') }}" target="_blank" class="social-button linkedin">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/?text={{ urlencode(($title ?? '') . ' ' . url()->current()) }}" target="_blank" class="social-button whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<style>
    .social-share-buttons {
        display: flex;
        gap: 10px;
        margin: 20px 0;
    }

    .social-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-button:hover {
        transform: translateY(-3px);
    }

    .facebook { background-color: #3b5998; }
    .twitter { background-color: #1da1f2; }
    .linkedin { background-color: #0077b5; }
    .whatsapp { background-color: #25d366; }
</style>
