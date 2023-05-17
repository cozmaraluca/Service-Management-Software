# Service-Management-Software
This project helps to keep evidence of the devices in the store's service section and the clients. 
It also creates personalized service entry sheets, warranty and pick-up documents. 
The user has the ability to create these documents and search for clients in the database, only if the login process was completed.
All the data entered by the user is stored with the help of a MySQL table. Each entry sheet is identifyed by a unique number. When the corresponding pick-up document is generated, the data is pulled from the database (identifyed by the id number) and the pick-up document is automatically filled in.
The search option is able to identify the entry sheets by one, two or three parameters (the client's name or phone number, the device's serial number, or a combination of them).
The password is crypted using the md5 algorithm. The user can access the database and the app's features only after the login process is completed(the user's name and id number are correctly provided and the password is correct).
Creating a service entry sheet: collecting data from the client -  name and phone number, device model, serial number and defect etc. The sheet's id number is generated and the data is stored in the database.
Creating a pick-up dcument: the entry sheet's id number is provided and the repairing procedures the device has suffered. The client's and device's data is pulled from the database and the document is generated.
Creating a warranty document: coolecting data from the client - name, phone number, device model and serial number and warranty period.
