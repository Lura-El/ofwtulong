<?php

 require __DIR__ . '/../inc/connect.db.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {   

        $full_name = htmlspecialchars($_POST['fname']);
        $passport_num = htmlspecialchars($_POST['passport-num']);
        $email_address = trim($_POST['email']);
        $mobile_num = htmlspecialchars($_POST['mphone']);
        $birthdate = htmlspecialchars($_POST['birthdate']);
        $civil_status = htmlspecialchars($_POST['civil-status']);
        $job_position = htmlspecialchars($_POST['job-position']);
        $job_site = htmlspecialchars($_POST['job-site']);
        $employer_name = htmlspecialchars($_POST['employer-name']);
        $employer_address = htmlspecialchars($_POST['employer-address']);
        $employer_email = htmlspecialchars($_POST['employer-email']);
        $employer_number = htmlspecialchars($_POST['employer-phone']);
        $recruitment_agency_phil = htmlspecialchars($_POST['agency-philippines']);
        $contact_num_agency = htmlspecialchars($_POST['agency-phil-phone']);
        $email_add_agency = htmlspecialchars($_POST['agency-phil-email']);
        $foreign_agency = htmlspecialchars($_POST['foreign-agency']);
        $contact_num_foreign_agency = htmlspecialchars($_POST['foreign-agency-phone']);
        $email_add_foreign_agency = htmlspecialchars($_POST['foreign-agency-email']);
        $next_of_kin = htmlspecialchars($_POST['kin-name']);
        $relationship_with_ofw = htmlspecialchars($_POST['relationship']);
        $contact_number_relative = htmlspecialchars($_POST['kin-phone']);
        $relative_address_phil = htmlspecialchars($_POST['kin-address']);
        $relative_email_add = htmlspecialchars($_POST['kin-email']);

        $query = "INSERT INTO membership (full_name, passport_num, email_address, mobile_num, birthdate, civil_status, job_position, 
        job_site, employer_name, employer_address, employer_email, employer_num, recruitment_agency_phil, contact_num_agency,
         email_add_agency, foreign_agency, contact_num_foreign_agency, email_add_foreign_agency, next_of_kin, relationship_with_ofw, 
         contact_number_relative, relative_address_phil, relative_email_add)
            VALUES (:full_name, :passport_num, :email_address, :mobile_num, :birthdate, :civil_status, :job_position, :job_site,
             :employer_name, :employer_address, :employer_email, :employer_num, :recruitment_agency_phil, :contact_num_agency, 
             :email_add_agency, :foreign_agency, :contact_num_foreign_agency, :email_add_foreign_agency, :next_of_kin, 
             :relationship_with_ofw, :contact_number_relative, :relative_address_phil, :relative_email_add)";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':passport_num', $passport_num);
        $stmt->bindParam(':email_address', $email_address);
        $stmt->bindParam(':mobile_num', $mobile_num);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':civil_status', $civil_status);
        $stmt->bindParam(':job_position', $job_position);
        $stmt->bindParam(':job_site', $job_site);
        $stmt->bindParam(':employer_name', $employer_name);
        $stmt->bindParam(':employer_address', $employer_address);
        $stmt->bindParam(':employer_email', $employer_email);
        $stmt->bindParam(':employer_num', $employer_number);
        $stmt->bindParam(':recruitment_agency_phil', $recruitment_agency_phil);
        $stmt->bindParam(':contact_num_agency', $contact_num_agency);
        $stmt->bindParam(':email_add_agency', $email_add_agency);
        $stmt->bindParam(':foreign_agency', $foreign_agency);
        $stmt->bindParam(':contact_num_foreign_agency', $contact_num_foreign_agency);
        $stmt->bindParam(':email_add_foreign_agency', $email_add_foreign_agency);
        $stmt->bindParam(':next_of_kin', $next_of_kin);
        $stmt->bindParam(':relationship_with_ofw', $relationship_with_ofw);
        $stmt->bindParam(':contact_number_relative', $contact_number_relative);
        $stmt->bindParam(':relative_address_phil', $relative_address_phil);
        $stmt->bindParam(':relative_email_add', $relative_email_add);

        if ($stmt->execute()) {
            // header("Location: /ofw/index.php");
            // exit;
            echo "successfully submitted";
        }else{
            echo "failed to submit";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
