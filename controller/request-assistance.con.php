<?php

    require __DIR__ . '/../inc/connect.db.php';

    try {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {   

            $first_name = htmlspecialchars($_POST['first-name']);
            $middle_name = htmlspecialchars($_POST['middle-name']);
            $last_name = htmlspecialchars($_POST['last-name']);

            $passport_num = htmlspecialchars($_POST['passport-number']);
            $iqama_number = htmlspecialchars($_POST['iqama-num']);
            $gender = htmlspecialchars($_POST['gender']);
            $email_fb = htmlspecialchars($_POST['email-fb']);
            $occupation = htmlspecialchars($_POST['occupation']);
            $personal_phone_num = htmlspecialchars($_POST['personal-phone']);
            $other_phone_num = htmlspecialchars($_POST['other-phone']);
            $ksa_location = htmlspecialchars($_POST['ksa-location']);
            $employer_name = htmlspecialchars($_POST['employer-name']);
            $employer_number = htmlspecialchars($_POST['employer-phone']);
            $saudi_agency = htmlspecialchars($_POST['saudi-agency']);
            $phil_agency = htmlspecialchars($_POST['ph-agency']);
            $complaint = htmlspecialchars($_POST['complaint']);
            // $location_tracker 
            
            $uploaded_files = [];
            $allowed_types = ['image/jpeg', 'image/png', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']; // JPEG, PNG, PDF, Word
            $max_size = 5 * 1024 * 1024;

            if (!empty($_FILES['files'])) {
                foreach ($_FILES['files']['name'] as $key => $filename) {
                    $tmp_name = $_FILES['files']['tmp_name'][$key];
                    $file_type = $_FILES['files']['type'][$key];
                    $file_size = $_FILES['files']['size'][$key];

                    // Validate file type
                    // if (!in_array($file_type, $allowed_types)) {
                    //     echo "Error: " . htmlspecialchars($filename) . " is not a valid file type.<br>";
                    //     continue;
                    // }

                    // Validate file size
                    if ($file_size > $max_size) {
                        echo "Error: " . htmlspecialchars($filename) . " exceeds the 5MB limit.<br>";
                        continue;
                    }

                    $destination = $_SERVER['DOCUMENT_ROOT'] . '/ofw/uploads/' . basename($filename);
                    
                    if (move_uploaded_file($tmp_name, $destination)) {
                        $uploaded_files[] = [
                            'file_name' => htmlspecialchars($filename),
                            'file_type' => htmlspecialchars($file_type),
                            'file_path' => $destination  
                        ];
                    }
                }
            }

            $files_json = json_encode( $uploaded_files);

            // add location_tracker in database

            $query = "INSERT INTO request_assistance (first_name, middle_name, last_name, passport_num, iqama_number, gender, email_fb, occupation, 
                                                        personal_phone_num, other_phone_num, ksa_location, employer_name, employer_number, saudi_agency, 
                                                        phil_agency, uploaded_files, complaint) 
                    VALUES (:first_name, :middle_name, :last_name, :passport_num, :iqama_number, :gender, :email_fb, :occupation, 
                            :personal_phone_num, :other_phone_num, :ksa_location, :employer_name, :employer_number, :saudi_agency, 
                            :phil_agency, :uploaded_files, :complaint)";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':passport_num', $passport_num);
            $stmt->bindParam(':iqama_number', $iqama_number);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':email_fb', $email_fb);
            $stmt->bindParam(':occupation', $occupation);
            $stmt->bindParam(':personal_phone_num', $personal_phone_num);
            $stmt->bindParam(':other_phone_num', $other_phone_num);
            $stmt->bindParam(':ksa_location', $ksa_location);
            $stmt->bindParam(':employer_name', $employer_name);
            $stmt->bindParam(':employer_number', $employer_number);
            $stmt->bindParam(':saudi_agency', $saudi_agency);
            $stmt->bindParam(':phil_agency', $phil_agency);
            $stmt->bindParam(':uploaded_files', $files_json);
            $stmt->bindParam(':complaint', $complaint);

            if ($stmt->execute()) {
                echo "Successfully submitted!";
            } else {
                echo "Failed to submit.";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
