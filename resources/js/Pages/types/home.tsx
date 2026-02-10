interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
}
interface HomeProps {
    users?: User[];
    message?: string;
}

export default HomeProps;