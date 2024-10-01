<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $vcard->name }} - Digital Business Card</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .vcard-card {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .vcard-header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .vcard-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
        }

        .vcard-header h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        .vcard-content {
            padding: 20px;
            text-align: center;
        }

        .vcard-content p {
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Custom styles for contact info */
        .contact-info {
            padding: 15px;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: -30px;
            left: -30px;
            width: 200px;
            height: 200px;
            background-color: rgba(0, 123, 255, 0.2);
            border-radius: 50%;
            transform: scale(1.5);
            z-index: 0;
        }

        .contact-info p {
            position: relative;
            z-index: 1;
        }

        /* Footer Styles */
        footer {
            background-color: #222;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            margin-top: 20px;
        }

        footer p {
            margin: 5px 0;
        }

        footer .footer-contact {
            margin-bottom: 20px;
        }

        footer .footer-contact p {
            font-size: 14px;
        }

        /* Icon styles */
        .contact-actions {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding-top: 15px;
        }

        .contact-actions a {
            font-size: 24px;
            color: #007bff;
        }

        .contact-actions a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="vcard-card">
        <!-- Vcard Header -->
        <div class="vcard-header">
            <img src="{{ asset('photos/'.$vcard->photo) }}" alt="Photo of {{ $vcard->name }}">
            <h1>{{ $vcard->name }}</h1>
            <p>{{ $vcard->position }}</p>
        </div>

        <!-- Vcard Content -->
        <div class="vcard-content">
            <!-- Contact Information with Custom Styling -->
            <div class="contact-info">
                <p><span>Phone:</span> 081225393118</p>
                <p><span>Email:</span> andyfaisal36@gmail.com</p>
                <p><span>Position:</span> Magang</p>
            </div>
        </div>

        <!-- Contact Icons (Logo Only) -->
        <div class="contact-actions">
            <!-- Icon Website -->
            <a href="https://indraco.com" target="_blank" title="Visit Website">
                <i class="bi bi-globe"></i>
            </a>
            <!-- Icon Save Contact -->
            <a href="/download-vcard/{{ $vcard->id }}" download title="Save Contact">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </div>

        <!-- Vcard Footer with Website and Save Contact -->
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-contact">
            <p><strong>PT Indraco</strong></p>
            <p>Phone: +62 123 4567</p>
            <p>Email: contact@indraco.com</p>
            <p>Address: Jl. Raya No. 123, Surabaya, Indonesia</p>
        </div>
        <p>&copy; 2024 PT Indraco. All Rights Reserved.</p>
        <p>COBA COBA DULU GA SIE KAWAN</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Downloading vCard -->
    <script>
        function downloadVCard() {
            window.location.href = "/download-vcard/{{ $vcard->id }}";
        }
    </script>

</body>
</html>
