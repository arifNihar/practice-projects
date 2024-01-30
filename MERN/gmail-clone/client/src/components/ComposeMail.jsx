

import { Dialog, styled, Typography, Box, InputBase, TextField, Button } from '@mui/material'; 
import { Close, DeleteOutline } from '@mui/icons-material';
import { useState } from 'react';


const dialogStyle = {
    height: '90%',
    width: '80%',
    maxWidth: '100%',
    maxHeight: '100%',
    boxShadow: 'none',
    borderRadius: '10px 10px 0 0',
}

const Header = styled(Box)`
    display: flex;
    justify-content: space-between;
    padding: 10px 15px;
    background: #f2f6fc;
    & > p {
        font-size: 14px;
        font-weight: 500;
    }
`;

const RecipientWrapper = styled(Box)`
    display: flex;
    flex-direction: column;
    padding: 0 15px;
    & > div {
        font-size: 14px;
        border-bottom: 1px solid #F5F5F5;
        margin-top: 10px;
    }
`;

const Footer = styled(Box)`
    display: flex;
    justify-content: space-between;
    padding: 10px 15px;
    align-items: center;
`;

const SendButton = styled(Button)`
    background: #0B57D0;
    color: #fff;
    font-weight: 500;
    text-transform: none;
    border-radius: 18px;
    width: 100px;
    hover: {
        background: #0B57D0;
        color: #fff;
    }
`

const ComposeMail = ({ openDialog, setOpenDialog }) => {
    const[data, setData] = useState({});

    const config = {
        Username: 'codeman77@yopmail.com',
        Password: '77C183B8645DCF8162769261902C6CA07CF1',
        Host: 'smtp.elasticemail.com',
        Port: 2525,
    }


    const sendEmail = (e) => {
        e.preventDefault();
        if (window.Email) {
            console.log({data});
            window.Email.send({
                ...config,
                To : 'arif.entertech19@gmail.com',
                From : "arif.entertech19@gmail.com",
                Subject : data.subject,
                Body : data.body
            }).then(
                message => alert(message)
            );
        }
        setOpenDialog(false);
    }

    const closeComposeMail = (e) => {
        e.preventDefault();
        setOpenDialog(false);
    }

    const onValueChange = (e) => {
        setData({...data, [e.target.name]: e.target.value});
    }

    return (
        <Dialog
            open={openDialog}
            PaperProps={{ sx: dialogStyle }}
        >
            <Header>
                <Typography>New Message</Typography>
                <Close fontSize="small" onClick={(e) => closeComposeMail(e)} sx={{cursor: 'pointer'}} />
            </Header>
            <RecipientWrapper>
                <InputBase placeholder='Recipients'name="to" onChange={(e) => onValueChange(e)} />
                <InputBase placeholder='Subject' name="subject" onChange={(e) => onValueChange(e)} />
            </RecipientWrapper>
            <TextField 
                multiline
                rows={28}
                sx={{ '& .MuiOutlinedInput-notchedOutline': { border: 'none' } }}
                name='body'
                onChange={(e) => onValueChange(e)}
            />
            <Footer>
                <SendButton onClick={(e) => sendEmail(e)}>Send</SendButton>
                <DeleteOutline onClick={() => setOpenDialog(false)} sx={{cursor: 'pointer', color: 'red'}}/>
            </Footer>
        </Dialog>
    )
}

export default ComposeMail;