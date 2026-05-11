<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SA1 - Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Student Registration Form</h1>
        
        <?php
        $firstName = "geraldine";
        $lastName = "origenes";
        $middleName = "gozon";
        $gender = "Female";
        $birthDate = "October 20, 2005";
        $email = "ggorigenes@fit.edu.ph";
        $phone = "0917-157-2773";
        $address = "684 A. Mabini St., Sangandaan, Caloocan City, Metro Manila";

        $studentNumber = "202410927";
        $entryType = "Sophomore";
        $course = "bachelor of science in information technology";
        $specialization = "web and mobile applications";
        $yearLevel = "2nd Year";
        $term = "3rd Semester";
        
        $prevSchool = "sti college caloocan";
        $lastDateAttended = "June 2024";

        $motherName = "amelia origenes";
        $motherOcc = "Jeepney Operator";
        $fatherName = "edgardo origenes";
        $fatherOcc = "Jeepney Driver";
        
        $emergencyContact = "amelia origenes";
        $emergencyPhone = "0926-575-3515";
        $relationship = "Mother";
        
        $birthCountry = "Philippines";
        $isFilipino = true;
        $requiresEpiPen = false;

        $fmtFullLabel = strtoupper($lastName . ", " . $firstName . " " . substr($middleName, 0, 1) . ".");
        $fmtCourse = strtoupper($course);
        $fmtSpec = ucwords($specialization);
        $fmtPrevSchool = ucwords($prevSchool);
        $fmtMother = ucwords($motherName);
        $fmtFather = ucwords($fatherName);
        $fmtEmergency = ucwords($emergencyContact);
        ?>

        <form>
            <div class="form-header-info">
                <p><strong>Student Number:</strong> <?= $studentNumber ?></p>
                <p><strong>Registration Date:</strong> <?= date("F j, Y") ?></p>
            </div>

            <fieldset>
                <legend>STUDENT IDENTITY</legend>
                <div class="form-group full">
                    <label>Full Legal Name (Last, First, M.I.):</label>
                    <input type="text" value="<?= $fmtFullLabel ?>" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Gender:</label>
                        <input type="text" value="<?= $gender ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="text" value="<?= $birthDate ?>" readonly>
                    </div>
                </div>
                <div class="form-group full">
                    <label>Permanent Address:</label>
                    <input type="text" value="<?= $address ?>" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email Address:</label>
                        <input type="text" value="<?= $email ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="text" value="<?= $phone ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>ACADEMIC PROGRAM & SPECIALIZATION</legend>
                <div class="form-group full">
                    <label>Degree Program:</label>
                    <input type="text" value="<?= $fmtCourse ?>" readonly style="font-weight: bold;">
                </div>
                <div class="form-group full">
                    <label>Area of Specialization:</label>
                    <input type="text" value="<?= $fmtSpec ?>" readonly style="color: #27ae60; font-weight: bold;">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Year Level:</label>
                        <input type="text" value="<?= $yearLevel ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Academic Term:</label>
                        <input type="text" value="<?= $term ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Entry Type:</label>
                        <input type="text" value="<?= $entryType ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>PREVIOUS EDUCATION</legend>
                <div class="form-row">
                    <div class="form-group">
                        <label>Previous Institution:</label>
                        <input type="text" value="<?= $fmtPrevSchool ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Graduation/Last Date Attended:</label>
                        <input type="text" value="<?= $lastDateAttended ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>PARENTAL INFORMATION</legend>
                <div class="form-row">
                    <div class="form-group">
                        <label>Mother's Maiden Name:</label>
                        <input type="text" value="<?= $fmtMother ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Mother's Occupation:</label>
                        <input type="text" value="<?= $motherOcc ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Father's Full Name:</label>
                        <input type="text" value="<?= $fmtFather ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Father's Occupation:</label>
                        <input type="text" value="<?= $fatherOcc ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>EMERGENCY CONTACT</legend>
                <div class="form-group full">
                    <label>In case of emergency, notify:</label>
                    <input type="text" value="<?= $fmtEmergency ?>" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Relationship:</label>
                        <input type="text" value="<?= $relationship ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Emergency Phone Number:</label>
                        <input type="text" value="<?= $emergencyPhone ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>CITIZENSHIP & MEDICAL DECLARATION</legend>
                <div class="checkbox-group">
                    <label><input type="checkbox" <?= $isFilipino ? "checked" : "" ?> disabled> Filipino Citizen</label>
                    <label><input type="checkbox" <?= $requiresEpiPen ? "checked" : "" ?> disabled> Requires Epi-pen</label>
                    <label><input type="checkbox" checked disabled> Enrollment Agreement Signed</label>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>