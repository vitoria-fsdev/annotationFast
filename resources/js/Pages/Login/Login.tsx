import React from 'react';

import LoginProps from './types/login';

export default function Login({ email, password }: LoginProps) {
    return (
        <p>Email: {email}, Password: {password}</p>
    )
}

