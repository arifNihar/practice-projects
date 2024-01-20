import * as z from "zod";


export const SignupFormValidation = z.object({
    name: z.string().min(4, {message: "Name must be at least 4 characters." }),
    username: z.string().min(4, {message: "Username must be at least 4 characters."}).max(50),
    email: z.string().email(),
    password: z.string().min(4, {message: "Password must be at least 6 characters."}),
  });

  export const SigninFormValidation = z.object({
    email: z.string().email(),
    password: z.string().min(4, {message: "Password must be at least 6 characters."}),
  });

  export const ProfileValidation = z.object({
    file: z.custom<File[]>(),
    name: z.string().min(2, { message: "Name must be at least 2 characters." }),
    username: z.string().min(2, { message: "Name must be at least 2 characters." }),
    email: z.string().email(),
    bio: z.string(),
  });
  
  export const PostFormValidation = z.object({
    caption: z.string().min(5).max(2200),
    file: z.custom<File[]>(),
    location: z.string().min(2).max(100),
    tags: z.string(),
  });