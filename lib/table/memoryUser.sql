CREATE SEQUENCE seq_hiz_memory_user_id
    START WITH 1 
	INCREMENT BY 1
;

CREATE SEQUENCE seq_hiz_memory_achievement_id
    START WITH 1 
	INCREMENT BY 1
;

CREATE TABLE hiz_memory_user
(
	id 							NUMBER,
	email                       VARCHAR2(256),
    password                    VARCHAR2(256),
    username                    VARCHAR2(256),
	--------------------		--------------------
	create_by					NUMBER,
	create_time					DATE DEFAULT SYSDATE,
	update_by					NUMBER,
	update_time					DATE DEFAULT SYSDATE,
	status						NUMBER DEFAULT 1
);

CREATE TABLE hiz_memory_achievement
(
	id 							NUMBER,
	title                       VARCHAR2(256),
    hint                    	VARCHAR2(256),
    user_id                    	VARCHAR2(256),
	obtain_status				VARCHAR2(256),
	--------------------		--------------------
	create_by					NUMBER,
	create_time					DATE DEFAULT SYSDATE,
	update_by					NUMBER,
	update_time					DATE DEFAULT SYSDATE,
	status						NUMBER DEFAULT 1
);
