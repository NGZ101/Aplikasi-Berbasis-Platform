<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV NGZ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/791ffebf52.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="bg" style="background-image: url('{{ asset('images/office.jpg') }}');"></div>
    <div class="content">
        <div class="icons">
            <div class="icon-brand">
                <i class="fa-brands fa-neos"></i>
                <p>NGZ</p>
            </div>
            <a href="http://www.linkedin.com/in/naufal-geraldo" class="icon-linkedin">
                <i class="fa-brands fa-linkedin"></i>
                <p>LinkedIn</p>
            </a>
            <a href="https://github.com/NGZ101" class="icon-github">
                <i class="fa-brands fa-github"></i>
                <p>Github</p>
            </a>
        </div>

        <div class="cv-card">

            <div class="cv-header">
                <img src="{{asset('images/Pas Photo Naufal.jpg')}}" alt="Foto Profil" class="profile-img">
                <div class="text-container">
                    <table class="info-table">
                        <tr>
                            <td><b>Naufal Geraldo Putra Pramudianartono</b></td>
                        </tr>
                        <tr>
                            <td>Computer Science Undergraduate</td>
                        </tr>
                        <tr>
                            <td>+62 81289492745 | naufal.geraldo30@gmail.com</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="footer-bar"></div>

            <div class="cv-data-left">

                <h3>Skills & abilities</h3>
                <ul>
                    @foreach($skills as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>

                <h3>Experience</h3>
                @foreach($experience as $exp)
                    <div class="exp-item">
                        <div class="exp-header">
                            <span class="exp-title">{{ $exp['title'] }}</span>
                            <span class="exp-period">{{ $exp['period'] }}</span>
                        </div>
                        <ul>
                            @foreach($exp['responsibilities'] as $task)
                                <li>{{ $task }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</body>

</html>