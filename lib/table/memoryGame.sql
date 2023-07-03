CREATE SEQUENCE seq_hiz_memory_game_id
    START WITH 1 
	INCREMENT BY 1
;

CREATE SEQUENCE seq_hiz_memory_class_id
    START WITH 1 
	INCREMENT BY 1
;

CREATE SEQUENCE seq_hiz_memory_move_id
    START WITH 1 
	INCREMENT BY 1
;

CREATE TABLE hiz_memory_game
(
	id 							NUMBER,
	user_id 					NUMBER,
	date_start 					DATE,
	date_finish					DATE,
	minute   					NUMBER,
	second   					NUMBER,
	score   					NUMBER,
	cardQty   					NUMBER,
	move       					NUMBER,
	difficulty                  VARCHAR2(256),
    game_status                 VARCHAR2(256),
	--------------------		--------------------
	create_by					NUMBER,
	create_time					DATE DEFAULT SYSDATE,
	update_by					NUMBER,
	update_time					DATE DEFAULT SYSDATE,
	status						NUMBER DEFAULT 1
);

CREATE TABLE hiz_memory_card_class
(
    id       					NUMBER,
    game_id       				NUMBER,
    class                       VARCHAR2(256),
	--------------------		--------------------
	create_by					NUMBER,
	create_time					DATE DEFAULT SYSDATE,
	update_by					NUMBER,
	update_time					DATE DEFAULT SYSDATE,
	status						NUMBER DEFAULT 1
);

CREATE TABLE hiz_memory_move_dict
(
    id       					NUMBER,
    game_id       				NUMBER,
    move                        VARCHAR2(256),
	--------------------		--------------------
	create_by					NUMBER,
	create_time					DATE DEFAULT SYSDATE,
	update_by					NUMBER,
	update_time					DATE DEFAULT SYSDATE,
	status						NUMBER DEFAULT 1
);