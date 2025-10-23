<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Founder | Jingle Holiday Bazar</title>

  <style>
    /* ===== RESET ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #fff;
      color: #222;
      line-height: 1.7;
    }

    /* ===== FOUNDER SECTION ===== */
    .founder-section {
      max-width: 1100px;
      margin: 80px auto;
      padding: 20px;
      text-align: center;
    }

    .founder-section h1 {
      font-size: 2.4rem;
      color: #d4af37; /* Golden */
      margin-bottom: 40px;
      letter-spacing: 1px;
      font-weight: 700;
      text-transform: uppercase;
    }

    .founder-card {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      justify-content: center;
      gap: 40px;
      background: #f9f9f9;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .founder-image {
      flex: 1 1 300px;
      text-align: center;
    }

    .founder-image img {
      width: 260px;
      height: 260px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #d4af37;
      box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
      transition: transform 0.3s ease;
    }

    .founder-image img:hover {
      transform: scale(1.05);
    }

    .founder-info {
      flex: 2 1 400px;
      text-align: left;
    }

    .founder-info h2 {
      font-size: 1.8rem;
      color: #000;
      margin-bottom: 10px;
    }

    .founder-info h4 {
      color: #666;
      margin-bottom: 25px;
    }

    .founder-info p {
      font-size: 1rem;
      color: #333;
      text-align: justify;
      margin-bottom: 15px;
    }

    /* ===== BACK BUTTON ===== */
    .back-btn {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 30px;
      background-color: #d4af37;
      color: #000;
      text-decoration: none;
      font-weight: 600;
      border-radius: 50px;
      box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      background-color: #c19a2c;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(212, 175, 55, 0.6);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .founder-card {
        flex-direction: column;
        padding: 25px;
      }

      .founder-info {
        text-align: center;
      }

      .founder-info p {
        text-align: justify;
      }

      .founder-image img {
        width: 200px;
        height: 200px;
      }

      .founder-section h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>

<body>
  <!-- ====== HEADER (Your header goes above this section) ====== -->
@include('user_layout.header');
  <section class="founder-section">
    <h1>About Our Founder</h1>

    <div class="founder-card">
      <div class="founder-image">
        <img src="images/founder.jpeg" alt="Founder - Mr. Pranay Barthwal">
      </div>

      <div class="founder-info">
        <h2>Mr. Pranay Barthwal</h2>
        <h4>Founder / Managing Director</h4>

        <p>
          In addition to being a founding director of <strong>Homes 4 Life Pty Ltd</strong> and <strong>The P Group Holding</strong>, 
          Pranay is a real estate investor and coach to his customers. With over 5 years of expertise investing in real estate, 
          Pranay has owned a multimillion-dollar portfolio spread across several nations, including Australia, Dubai, Abu Dhabi, and India.
        </p>

        <p>
          Pranay hails from a family of businesspeople that run multimillion-dollar companies worldwide in a variety of industries, 
          including information technology (IT), hospitality (hotels and resorts), and Indo-Chinese ventures across India.
        </p>

        <p>
          Since he was young, Pranay has been passionate about real estate because his family has always guided him in this field. 
          Pranay and his family have been involved in real estate investing for over four decades.
        </p>

        <p>
          He holds a Bachelor's degree in Computer Science and has studied Business Analytics, Artificial Intelligence, and Cyber Security. 
          He also has three years of experience working in top management for large companies like Synergy Tech and Hudson Group around the world.
        </p>

        <p>
          After moving to Dubai in 2016, Pranay began his career in real estate and later, in 2023, founded a renowned real estate company in Sydney, Australia. 
          In the beginning, he collaborated with successful teams and individuals to gain a deep understanding of the Australian and UAE real estate markets and cycles.
        </p>

        <p>
          Combining his years of expertise as a successful real estate agent, Pranay quickly made a reputation for himself in the global real estate industry. 
          With the goal of helping people achieve financial independence and retire comfortably through property investments, 
          Pranay founded <strong>The P Group Holding</strong>, pursuing his lifelong passion for real estate investing.
        </p>
      </div>
    </div>

    <a href="index.html" class="back-btn">← Back to Home</a>
  </section>

  <!-- ====== FOOTER (Your footer goes below this section) ====== -->
     
@include('user_layout.footer');
</body>
</html>
