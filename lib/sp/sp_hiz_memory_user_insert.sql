CREATE OR REPLACE PROCEDURE sp_hiz_memory_user_insert
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
	out_id				        OUT	NUMBER,
    in_email                    IN  hiz_memory_user.email%TYPE,
    in_username                 IN  hiz_memory_user.username%TYPE,
    in_password                 IN  hiz_memory_user.password%TYPE,
    in_admin_id                 IN  hiz_memory_user.create_by%TYPE
)
AS
    e_count NUMBER;
BEGIN
    out_code := 0;
	out_msg := 'OK';
	out_id := seq_hiz_memory_user_id.nextval;

    SELECT 
        COUNT(*) 
    INTO 
        e_count 
    FROM 
        HIZ_MEMORY_USER
    WHERE 
        UPPER(email) = UPPER(in_email)
        AND status = 1;

    IF e_count > 0 THEN 
        out_code := 1;
	    out_msg := 'EMAIL ALREADY REGISTERED';
        RETURN;
    END IF;

    INSERT INTO HIZ_MEMORY_USER
    (
        id,
        email,
        username,
        password,
        create_by,
        create_time,
        status
    )
    VALUES
    (
        out_id,
        in_email,
        in_username,
        in_password,
        in_admin_id,
        SYSDATE,
        1
    );
END;
/

CREATE OR REPLACE PROCEDURE sp_hiz_memory_achieve_insert
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_title                    IN  hiz_memory_achievement.title%TYPE,
    in_user_id                  IN  hiz_memory_achievement.user_id%TYPE,
    in_hint                     IN  hiz_memory_achievement.hint%TYPE,
    in_admin_id                 IN  hiz_memory_achievement.create_by%TYPE
)
AS
BEGIN
    out_code := 0;
	out_msg := 'OK';

    INSERT INTO HIZ_MEMORY_ACHIEVEMENT
    (
        id,
        title,
        hint,
        user_id,
        obtain_status,
        create_by,
        create_time,
        status
    )
    VALUES
    (
        seq_hiz_memory_achievement_id.nextval,
        in_title,
        in_hint,
        in_user_id,
        'NOT OBTAINED',
        in_admin_id,
        SYSDATE,
        1
    );
END;
/

DECLARE
    outCode NUMBER;
    outMsg VARCHAR2(4000);
BEGIN
    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '6',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '6'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '8',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '8'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '9',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '9'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '12',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '12'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '13',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '13'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '14',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '14'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '18',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '18'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '24',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '24'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);

    sp_hiz_memory_achieve_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        in_user_id                  => '25',
        in_title                    => 'A Win Is A Win',
        in_hint                     => 'Win With Minus Score',
        in_admin_id 	            => '25'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);
END;
/