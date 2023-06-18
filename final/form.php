
<!DOCTYPE html>\
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
  <?php include "style.css" ?>
  <?php include "form.css" ?>
</style>

<?php include('header.php'); ?>

        
<section class="admission-form">
    <h3> Application<br>
    form</h3>
  </section>
  
    <section>
        <div class="container">
            <h3> APPLICATION FORM</h3>
            <form action="" method="POST">
                <div class="form first">
                    <div class="details">
                        <h2>PERSONAL DETAILS</h2>

                        <div class="field">
                            <div class="input-field">
                                <label for="fname">Full Name</label>
                                <input type="text" placeholder="Enter your name" required><br>
                            </div>
                            <div class="input-field">
                                <label for="dob">Birth Date</label>
                                <input type="date" required><br>
                            </div>
                            <div class="input-field">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter your email" required><br>
                            </div>
                            <div class="input-field">
                                <label for="number">Phone no</label>
                                <input type="text" id="number" placeholder="Enter Phone no"><br>
                            </div>
                        </div>
                            <div class="gender details">
                                <label for="gender">Gender</label>
                                <input type="radio" id="gender" value="male">Male 
                                <input type="radio" id="gender" value="female">Female
                                <input type="radio" id="gender" value="other">Others<br>
                            </div>
                            <div class="advertise details">
                                How did you come to know about the Academic program? (Please tick mark in the relevant box)<br>
                                <label for="option1">Advertisement</label>
                                <input type="checkbox" id="option1" name="option1" value="Advertisement">
                                <label for="option2">Friend</label>
                                <input type="checkbox" id="option2" name="option2" value="Friend">
                                <label for="option3">Education Fair</label>
                                <input type="checkbox" id="option3" name="option3" value="Education Fair">
                                <label for="option4">Internet</label>
                                <input type="checkbox" id="option4" name="option4" value="Internet">
                                <label for="option5">Direct Mail</label>
                                <input type="checkbox" id="option5" name="option5" value="Direct Mail">
                                <label for="option6">Other</label>
                                <input type="checkbox" id="option6" name="option6" value="Other">
                            </div>
                            <div class="form-section">
                                <h2>Educational Background</h2>
                                <div class="form-group">
                                  <label for="qualification">Highest Qualification</label>
                                  <input type="text" id="qualification" name="qualification" required>
                                </div>
                                <div class="form-group">
                                  <label for="institute">Institute Name</label>
                                  <input type="text" id="institute" name="institute" required>
                                </div>
                                <div class="form-group">
                                  <label for="year">Year of Passing</label>
                                  <input type="number" id="year" name="year" required>
                                </div>
                              </div>
                                <div class="college-choice">
                                    <h2>Preferred College & Course</h2>
                                     <label for="preferred-college">Preferred College:</label><br>
                                     <select id="preferred-college" required>
                                        <option value="" disabled selected>Select your preferred college</option>
                                        <option value="college1">College 1</option>
                                        <option value="college2">College 2</option>
                                        <option value="college3">College 3</option>
                                        <option value="college4">College 4</option>
                                        <option value="college5">College 5</option>
                                    </select><br><br>

                                    <label for="preferred-course">Preferred Course:</label><br>
                                    <select id="preferred-course" required>
                                        <option value="" disabled selected>Select your preferred course</option>
                                        <option value="course1">Course 1</option>
                                        <option value="course2">Course 2</option>
                                        <option value="course3">Course 3</option>
                                        <option value="course4">Course 4</option>
                                        <option value="course5">Course 5</option>
                                    </select><br><br>
                            </div>
                              <h2>FAMILY DETAILS</h2>
                              <div class="f-details">
                              
                                  <table border="1px" class="table">
                                      
                                       <tr>
                                           <td rowspan="5" class="father">Father</td>
                                            <td>
                                              <label>name</label>
                                              <input type="text" required>
                                            </td> 
                                          <td>
                                              <label>Occupation</label>
                                              <input type="text" required>
                                          </td>
                                      </tr>
                                      <tr>
                                           <td colspan="2">
                                              <label>address</label>
                                              <input type="text" required>
                                           </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">
                                              <label>Post Code</label>
                                              <input type="number">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <label>telephone</label>
                                              <input type="numer">
                                          </td>
                                          <td>
                                              <label>mobile</label>
                                              <input type="number" >
                                          </td>
                                      </tr>
                                      <tr>
                                         <td colspan="2">
                                          <label>email</label>
                                          <input type="email">
                                         </td>
                                       </tr>
                                      </table></div>

                                      <div class="f-details">
                                  <table class="table" >
                                      <tr>
                                          <td rowspan="5" class="mother">Mother</td>
                                           <td>
                                             <label>name</label>
                                             <input type="text" required>
                                           </td> 
                                         <td>
                                             <label>Occupation</label>
                                             <input type="text" required>
                                         </td>
                                     </tr>
                                     <tr>
                                          <td colspan="2">
                                             <label>address</label>
                                             <input type="text" required>
                                          </td>
                                     </tr>
                                     <tr>
                                         <td colspan="2">
                                             <label>Post Code</label>
                                             <input type="number">
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <label>telephone</label>
                                             <input type="numer">
                                         </td>
                                         <td>
                                             <label>mobile</label>
                                             <input type="number" >
                                         </td>
                                     </tr>
                                     <tr>
                                        <td colspan="2">
                                         <label>email</label>
                                         <input type="email">
                                        </td>
                                      </tr>
                                       </table>
                                         </div>
                            
                            <span class="title">SPECIAL NEEDS(if any)</span>
                            <div class="needs">
                                Do you require any special arrangements to be made for contact classes/examination materials.(eg. Physical disorder, wheelchair user, legally imposed travel restroom)<br>
                                <label for="yes">Yes</label>
                                <input type="checkbox" id="yes" name="yes" value="yes">
                                <label for="No">No</label>
                                <input type="checkbox" id="No" name="No" value="no"><br>
                                If yes, please specify your requirements:<br>
                                <textarea id="user-input" name="user-input"></textarea>
                            </div>
                            <span class="title">DECLARATION</span>
                            <div class="declare">
                                I hereby
                            </div>
                            <span class="title">REASONS FOR APPLICATION</span>
                            <div class="reason"></div>
                             Please state how this Academic Program of UNI will benefit you in addressing your professional application?


                            </div>
                        <span class="title">CHECKLIST</span>
                        <div class="list">
                        The duty filled application Form must be submitted to UNI addmission desk along with the ORIGINAL certificates/Marksheets as well as Photocopies.<br>
                        1. 6 latest Passport Size Photographs<br>
                        2. Testimonals<br>
                                - SEE Marksheet/Certificate<br>
                                - 10+2 Marksheet/Certificate<br>
                                - Migration Certificate<br>
                                - Character Certificate from last institute attended<br>
                        </div>    
                        <span class="title">FOR OFFICE USE</span>
                        <div class="off-use">
                            Fee receipt no.<INPUT type="number" name="num">     Amount <INPUT type="number" name="num">         Admission Code <INPUT type="number" name="num"><br>
                            
                            Date<INPUT type="date" name="date">          Signature<input type="text" name="text">
                        </div>
                        <input type="Submit" value="submit">
                    </div>
                </div>
            </form>
        </div>
</section>
</body>
</html>