
CREATE TABLE tbl_user
(
  id serial NOT NULL,
  username text NOT NULL,
  password text,
  full_name text,
  email text,
  create_date timestamp with time zone,
  update_date timestamp with time zone,
  active real NOT NULL DEFAULT 1,
  avatar text,
  CONSTRAINT tbl_user_pk_tbl_migration PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);


CREATE TABLE survay (
	ID SERIAL PRIMARY KEY NOT NULL,
	DATE TIMESTAMP (6) WITHOUT TIME ZONE,
	TIME TIME,
	msisdn CHAR (25) NOT NULL,
	user_id CHAR (15) NOT NULL,
	product CHAR (25) NOT NULL,
	assigned_to CHAR (35),
	call_date TIMESTAMP (6) WITHOUT TIME ZONE,
	call_status CHAR (30),
	purpose_served CHAR (25),
	heard_abt_tonic CHAR (25),
	knowledge CHAR (25),
	behavior CHAR (25),
	waiting_time CHAR (25),
	ad_others_comment CHAR (50),
	easy_to_avail CHAR (15),
	hos_par_auth_behav CHAR (15),
	com_from_tonic_auth CHAR (15),
	dc_others_comment CHAR (50),
	refer_to_ff CHAR (15),
	score INT NOT NULL,
	category CHAR (20),
	reason_be_score CHAR (20),
	detail_reason TEXT,
	improvement_area CHAR (30),
	improvement_area_detail TEXT,
	create_date TIMESTAMP (6) WITHOUT TIME ZONE,
	update_date TIMESTAMP (6) WITHOUT TIME ZONE
);