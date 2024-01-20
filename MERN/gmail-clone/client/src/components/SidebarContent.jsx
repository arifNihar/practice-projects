
import { CreateOutlined } from '@mui/icons-material';
import { Box, Button, List, ListItem, styled } from '@mui/material';
import { Sidebar_Data } from '../config/sidebar.config';
import ComposeMail from './ComposeMail';
import { useState } from 'react';

const ComposeButton = styled(Button)({
    background: '#c2e7ff',
    color:'#001d35',
    padding: 15,
    borderRadius: 16,
    minWidth: 140,
    textTransform: 'none'
});

const Container = styled(Box)({
    padding: 8,
    '& > ul': {
        padding: '15px 0 0 5px',
        fontWeight: 500,
        fontSize: 14,
        cursor: 'pointer'
    },
    '& > ul > li > svg': {
        marginRight: 20
    }
});

const SidebarContent = () => {
    const [openDialog, setOpenDialog] = useState(false);

    const onComposeClick = () => {
        setOpenDialog(true);
    };

  return (
    <Container>
      <ComposeButton onClick={() => onComposeClick()}>
        <CreateOutlined style={{ marginRight: 10}} />
        Compose
      </ComposeButton>
      <List>
        {Sidebar_Data.map((data, idx) => (
            <ListItem key={idx}>
                <data.icon fontSize='small'/> {data.title}
            </ListItem>
        ))
        }
      </List>
      <ComposeMail openDialog={openDialog} setOpenDialog={setOpenDialog}/>
    </Container>
  );
}

export default SidebarContent;
