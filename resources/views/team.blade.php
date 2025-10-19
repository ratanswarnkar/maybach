@include('user_layout.header');
  
<section id="team" class="team-section">
  <div class="container">
    <h2 class="section-title">Meet Our Team</h2>

    <!-- Founder -->
    <div class="founder">
      <img src="images/founder.jpeg" alt="Founder">
      <h3>Mr. Pranay Barthwal</h3>
      <p>Founder / Managing Director</p>
    </div>

    <!-- Connecting line -->
    <div class="connector-line"></div>

    <!-- HR and Manager -->
    <div class="managers">
      <div class="member">
        <img src="images/hr.png" alt="HR">
        <h3>Ms. Sakshi Sharma</h3>
        <p>Human Resources</p>
      </div>
      <div class="member">
        <img src="images/manager.png" alt="Manager">
        <h3>Mr. Shivam Yadav</h3>
        <p>Administrator</p>
      </div>
    </div>

    <!-- Connector -->
    <div class="connector-line"></div>

    <!-- Team Members -->
    <div class="team-members">
      <div class="member">
        <img src="images/it.jpeg" alt="Sales Executive">
        <h3>Ratan Swarnkar</h3>
        <p>IT Expert</p>
      </div>
      <div class="member">
        <img src="images/client_manager.png" alt="Marketing Head">
        <h3>Rajat Kumar</h3>
        <p>Client Manager</p>
      </div>
      <div class="member">
        <img src="images/real_estate_expert.png" alt="Engineer">
        <h3>Nishant Chauhan</h3>
        <p>Senior Real Estate Expert</p>
      </div>
      <div class="member">
        <img src="images/client_manager1.jpeg" alt="Designer">
        <h3>Anshika Sharma</h3>
        <p>Client manager</p>
      </div>
    </div>

  </div>
</section>

<style>
  
.team-section {
  background: #f8f9fb;
  text-align: center;
  padding: 80px 20px;
}

.section-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 50px;
}

/* Founder */
.founder {
  text-align: center;
  margin-bottom: 40px;
}

.founder img {
  width: 220px;
  height: 220px;
  border-radius: 50%; /* Founder stays round */
  object-fit: cover;
  border: 6px solid #fff;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.founder h3 {
  margin-top: 15px;
  font-size: 1.4rem;
  color: #333;
}

.founder p {
  color: #666;
  font-size: 1rem;
}

/* Connecting Line */
.connector-line {
  width: 2px;
  height: 40px;
  background: #ccc;
  margin: 20px auto;
}

/* HR + Manager */
.managers {
  display: flex;
  justify-content: center;
  gap: 60px;
  flex-wrap: wrap;
  margin-bottom: 40px;
}

.managers .member,
.team-members .member {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  width: 220px;
  transition: transform 0.3s ease;
}

.member:hover {
  transform: translateY(-5px);
}

/* Square images for all except founder */
.managers .member img,
.team-members .member img {
  width: 180px;
  height: 200px;
  border-radius: 8px; /* 👈 makes square with small rounded corners */
  object-fit: cover;
  margin-bottom: 10px;
  border: 3px solid #fff;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.member h3 {
  font-size: 1.1rem;
  color: #333;
  margin: 8px 0 4px;
}

.member p {
  font-size: 0.9rem;
  color: #777;
}

/* Team Members */
.team-members {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 768px) {
  .founder img {
    width: 180px;
    height: 180px;
  }
  .managers, .team-members {
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }
  .connector-line {
    height: 25px;
  }
}
</style>

  
@include('user_layout.footer');
	