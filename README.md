1) Launch a new ec2 instance.

2) In this instance use the key and security group which we have created in step 1.

3) Launch one EBS volume (EBS) and mount that volume into /var/www/html.

4) Developers have uploaded the code into GitHub repo.

5) Copy the git repo code into /var/www/html.

6) Create an S3 bucket, and copy/deploy images and change the permission to public readable.

7) create a CloudFront using an s3 bucket.

8) we have to do most of the jobs using terraform.

let's start the above task.

