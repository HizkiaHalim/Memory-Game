CREATE OR REPLACE PROCEDURE sp_hiz_memory_user_update
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_id                       IN  hiz_memory_user.id%TYPE,
    in_email                    IN  hiz_memory_user.email%TYPE,
    in_username                 IN  hiz_memory_user.username%TYPE,
    in_password                 IN  hiz_memory_user.password%TYPE,
    in_admin_id                 IN  hiz_memory_user.create_by%TYPE
)
AS
    e_count NUMBER;
    u_count NUMBER;
BEGIN
    out_code := 0;
	out_msg := 'OK';

    SELECT 
        COUNT(*) 
    INTO 
        e_count 
    FROM 
        HIZ_MEMORY_USER
    WHERE 
        UPPER(email) = UPPER(in_email)
        AND id != in_id
        AND status = 1;

    IF e_count > 0 THEN 
        out_code := 1;
	    out_msg := 'EMAIL ALREADY REGISTERED';
        RETURN;
    END IF;

    SELECT 
        COUNT(*) 
    INTO 
        u_count 
    FROM 
        HIZ_MEMORY_USER
    WHERE 
        username = in_username
        AND id != in_id
        AND status = 1;

    IF u_count > 0 THEN 
        out_code := 1;
	    out_msg := 'USERNAME ALREADY TAKEN';
        RETURN;
    END IF;

    UPDATE
        HIZ_MEMORY_USER
    SET
        username = in_username,
        email = in_email,
        password = in_password,
        update_by = in_admin_id,
        update_time = SYSDATE
    WHERE
        id = in_id
    ;
END;
/

CREATE OR REPLACE PROCEDURE sp_hiz_memory_get_achievement
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_title                    IN  hiz_memory_achievement.title%TYPE,
    in_user_id                  IN  hiz_memory_achievement.user_id%TYPE,
    in_admin_id                 IN  hiz_memory_achievement.create_by%TYPE
)
AS
    a_counter NUMBER;
BEGIN
    out_code := 0;
	out_msg := 'OK';

    
    SELECT 
        COUNT(*) 
    INTO 
        a_counter 
    FROM 
        HIZ_MEMORY_ACHIEVEMENT
    WHERE 
        title = in_title
        AND obtain_status = 'OBTAINED'
        AND user_id = in_user_id
        AND status = 1;

    IF a_counter > 0 THEN 
        out_code := 1;
	    out_msg := 'Already Obtained';
        RETURN;
    END IF;

    UPDATE
        HIZ_MEMORY_ACHIEVEMENT
    SET
        obtain_status = 'OBTAINED',
        update_by = in_admin_id,
        update_time = SYSDATE
    WHERE
        title = in_title
        AND user_id = in_user_id
    ;
END;
/