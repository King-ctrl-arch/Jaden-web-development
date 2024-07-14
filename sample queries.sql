-- List all patients
SELECT * FROM Patients;

-- List future appointments
SELECT * FROM Appointments WHERE appointment_date > CURDATE();

-- List past appointments
SELECT * FROM Appointments WHERE appointment_date <= CURDATE();
