<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - Culture Béninoise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #008751; /* Vert béninois */
            --secondary-color: #fcd116
            
            ; /* Jaune béninois */
            --accent-color: #e8112d; /* Rouge béninois */
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .welcome-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .welcome-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--accent-color) 100%);
        }
        
        .welcome-header {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        
        .user-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1rem;
            margin: 1.5rem 0;
            border-left: 4px solid var(--secondary-color);
        }
        
        .btn-continue {
            background: linear-gradient(135deg, var(--primary-color) 0%, #006b41 100%);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 135, 81, 0.3);
        }
        
        .btn-continue:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 135, 81, 0.4);
        }
        
        .cultural-pattern {
            height: 100px;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Flag_of_Benin.svg/1200px-Flag_of_Benin.svg.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.1;
            margin: 2rem 0;
        }
        
        .cultural-icons {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
        }
        
        .cultural-icon {
            width: 60px;
            height: 60px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .welcome-message {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #495057;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        
        .role-badge {
            background-color: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            display: inline-block;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="welcome-container text-center">
                    <h1 class="welcome-header">Bienvenue {{ Auth::user()->prenom }} !</h1>
                    
                    <div class="welcome-message">
                        Nous sommes ravis de vous accueillir sur notre plateforme dédiée à la mise en valeur 
                        de la riche culture béninoise et de ses trésors patrimoniaux.
                    </div>
                    
                    <div class="user-info">
                        <p class="mb-1">Vous êtes connecté avec le rôle :</p>
                        <div class="role-badge">{{ Auth::user()->role }}</div>
                    </div>
                    
                    <div class="cultural-pattern"></div>
                    
                    <div class="cultural-icons">
                        <div class="cultural-icon">🎭</div>
                        <div class="cultural-icon">🌍</div>
                        <div class="cultural-icon">🏛️</div>
                        <div class="cultural-icon">🎨</div>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('welcome.continue') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-continue btn-lg mt-3">
                            Découvrir la plateforme
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


























{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h1>Bienvenue {{ Auth::user()->prenom }} !</h1>
    <p>Vous êtes connecté avec le rôle : {{ Auth::user()->role }}</p>
    
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('welcome.continue') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary btn-lg">Continuer</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
